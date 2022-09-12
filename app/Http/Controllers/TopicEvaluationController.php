<?php

namespace App\Http\Controllers;

use App\Events\EvaluationEvent;
use App\Models\TopicEvaluation;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\HasilPenilaianExport;
use App\Notifications\NewUserEvaluation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\DatabaseNotification;

class TopicEvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '';

        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' di Kategori ' . $category->name;
        }

        return view('allevaluation.index', [
            "title" => 'Semua Penilaian'. $title,
            "active" => 'penilaian',
            "topics" => TopicEvaluation::first()->filter(request(['search', 'category']))->paginate(6)->withQueryString(),
            'category' => Category::all()
        ]);
    }

    public function admin() {
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $category->name;
        }
        return view ('pages.admin.dataevaluation.index', [
            'title' => 'Data Penilaian',
            'active' => 'datapenilaian',
            'topics' => TopicEvaluation::latest()->filter(request(['search', 'category']))->paginate(10)->withQueryString(),
            'category' => Category::all(),
        ]);
    }

    public function evaluate() {
        return view ('pages.admin.dataevaluation.evaluate', [
            'title' => 'Data Penilaian Warga',
            'active' => 'datahasilpenilaian',
            'results1' => Evaluation::where('category_id','1')->avg('star_evaluation'),
            'results2' => Evaluation::where('category_id','2')->avg('star_evaluation'),
            'results3' => Evaluation::where('category_id','3')->avg('star_evaluation'),
            'results4' => Evaluation::where('category_id','4')->avg('star_evaluation'),
            'results5' => Evaluation::where('category_id','5')->avg('star_evaluation'),
            'results6' => Evaluation::where('category_id','6')->avg('star_evaluation'),
            'results7' => Evaluation::where('category_id','7')->avg('star_evaluation'),
            'results8' => Evaluation::where('category_id','8')->avg('star_evaluation'),
            'evaluate1' => Evaluation::where('category_id', '1')->orderBy('star_evaluation', 'asc')->paginate(3),
            'evaluate2' => Evaluation::where('category_id', '2')->orderBy('star_evaluation', 'asc')->paginate(3),
            'evaluate3' => Evaluation::where('category_id', '3')->orderBy('star_evaluation', 'asc')->paginate(3),
            'evaluate4' => Evaluation::where('category_id', '4')->orderBy('star_evaluation', 'asc')->paginate(3),
            'evaluate5' => Evaluation::where('category_id', '5')->orderBy('star_evaluation', 'asc')->paginate(3),
            'evaluate6' => Evaluation::where('category_id', '6')->orderBy('star_evaluation', 'asc')->paginate(3),
            'evaluate7' => Evaluation::where('category_id', '7')->orderBy('star_evaluation', 'asc')->paginate(3),
            'evaluate8' => Evaluation::where('category_id', '8')->orderBy('star_evaluation', 'asc')->paginate(3),
            'category' => Category::all(),
            'topic' => TopicEvaluation::all()
        ]);
    }

    public function export_excel()
	{
		return Excel::download(new HasilPenilaianExport, 'hasilpenilaian.xlsx');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dataevaluation.create', [
            'title' => 'Tambah Data Evaluation',
            'active' => 'datapenilaian',
            'category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'description' => 'required'
        ]);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->description), 50);
        TopicEvaluation::create($validatedData);
        return redirect('dataevaluation')->with('success-add', 'Topik Penilaian berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TopicEvaluation  $topicEvaluation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topicEvaluation = TopicEvaluation::with('evaluation')->find($id);
        return view('allevaluation.show', [
            'title' => 'Detail Penilaian',
            'active' => 'penilaian',
            'topic' => $topicEvaluation,
        ]);
    }

    public function details($id)
    {
        $evaluation = TopicEvaluation::findOrFail($id);
        return view('pages.admin.dataevaluation.show', [
            'title' => 'Detail Data Penilaian',
            'active' => 'datapenilaian',
            'evaluation' => $evaluation,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TopicEvaluation  $topicEvaluation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic = TopicEvaluation::findOrFail($id);
        return view ('pages.admin.dataevaluation.edit', [
            'title' => 'Edit Data Evaluation',
            'active' => 'datapenilaian',
            'topic' => $topic,
            'category' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TopicEvaluation  $topicEvaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        \Validator::make($request->all(),[
            'category_id' => 'required',
            'description' => 'required'
        ])->validate();

        $topic = TopicEvaluation::findOrFail($id);
        $topic->category_id = $request->get('category_id');
        $topic->description = $request->get('description');
        $topic['excerpt'] = Str::limit(strip_tags($request->description), 50);
        $topic->save();
        return redirect('dataevaluation')->with('success-update', 'Data Penilaian berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TopicEvaluation  $topicEvaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topicEvaluation = TopicEvaluation::findOrFail($id);
        $topicEvaluation->delete();
        return redirect()->back()->with('success-delete', 'Data penilaian berhasil dihapus');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(TopicEvaluation::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function ratingstore(Request $request, $id){
        $findReview = Evaluation::where(['user_id' => Auth::user()->id, 'topic_id' => $request->topic_id, 'category_id' => $request->category_id])->first();
       
        // $review = Evaluation::firstOrCreate([

        //     'user_id' => auth()->id(),

        // 'topic_id' => $request->topic_id

        // ], $request->except('product_id'));
        if ($findReview) {
            $request->request->add(['user_id' => Auth::user()->id]);
            $findReview->update($request->all());
            return redirect()->back()->with('success','Penilaian Anda telah diberikan. Terima kasih');
        } else {
            $request->request->add(['user_id' => Auth::user()->id]);
            $evaluation = Evaluation::create($request->all());
            event(new EvaluationEvent($evaluation));
            return redirect()->back()->with('success','Penilaian Anda telah diberikan. Terima kasih');
        }
    }

    public function result() {
        $topics = TopicEvaluation::all();

        $eval = Evaluation::all();
        $result3 = Evaluation::where('category_id','=', '3')->count();
        return view('resultevaluation.index', [
            'title' => 'Hasil Penilaian',
            'active' => 'hasilpenilaian',
            'topics' => $topics,
            'category' => Category::all(),
            'eval' => $eval,
            'result1' => Evaluation::where('category_id','1')->count(),
            'result11' => Evaluation::where('category_id','1')->avg('star_evaluation'),
            'result2' => Evaluation::where('category_id','=', '2')->count(),
            'result22' => Evaluation::where('category_id','2')->avg('star_evaluation'),
            'result3' => $result3,
            'result33' => Evaluation::where('category_id','3')->avg('star_evaluation'),
            'result4' => Evaluation::where('category_id','=', '4')->count(),
            'result44' => Evaluation::where('category_id','4')->avg('star_evaluation'),
            'result5' => Evaluation::where('category_id','=', '5')->count(),
            'result55' => Evaluation::where('category_id','5')->avg('star_evaluation'),
            'result6' => Evaluation::where('category_id','=', '6')->count(),
            'result66' => Evaluation::where('category_id','6')->avg('star_evaluation'),
            'result7' => Evaluation::where('category_id','=', '7')->count(),
            'result77' => Evaluation::where('category_id','7')->avg('star_evaluation'),
            'result8' => Evaluation::where('category_id','=', '8')->count(),
            'result88' => Evaluation::where('category_id','8')->avg('star_evaluation'),
        ]);
    }
}
