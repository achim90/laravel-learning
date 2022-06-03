<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Post;
use App\Models\posttag;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Log\Logger;
use Spatie\FlareClient\Http\Exceptions\NotFound;

class PostController extends Controller
{
    private const ERROR_LOG = '[Critical Error]';

    public function indexPost()
    {
//        $posts = Post::all();
        $category = Category::find(2);
//        $post = Post::find(1);
        return $category->posts;
//        $posts = Post::where('category_id', $category->id)->get();
//        return view('post.index', compact('posts'));
    }

    public function userIndex()
    {
        $post = Post::find(1);
        $posttag = posttag::all();
        return view('contact', compact('posttag', 'post'));
//        $user = User::find(1);

//        return $user->posts;
    }

    public function countryIndex()

    {
        $country = Country::find(3);
        $post = Post::find(1);
        return $country->posts;
    }

    public function IndexTag()

    {
        $post = Post::find(7);
        return $post->tags;
    }


    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }

    public function store()
    {
        $data = request()->validate
        (
            [
                'title' => 'string',
                'content' => 'string',
                'image' => 'string',
                'category_id' => '',
                'tags' => '',


            ]
        );
        $tags = $data['tags'];
        unset($data['tags']);

        $post =Post::create($data);

        $post->tags()->attach($tags);

//        foreach ($tags as $tag) {
//            posttag::firstOrCreate([
//                'tag_id' => $tag,
//                'post_id' => $post->id,
//            ]);
//
//        }
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::with('posts')->get();//жадный запрос
//        $categories = Category::all();//ленивый запрос
        $tags = Tag::all();
        $posttag = posttag::all();

        return view('post.edit', compact('post', 'posttag'), compact('categories', 'tags'));
    }

    public function update(Post $post)
    {
        $data = request()->validate
        (
            [
                'title' => 'string|min:8',
                'content' => 'string',
                'image' => 'string',
                'category_id' => '',
                'tags' => '',
            ]
        );
        $tags = $data['tags'];
        unset ($data ['tags']);
        $post->update($data);
        $post->tags()->sync($tags);

//        foreach ($tags as $tag) {
//            posttag::updateOrCreate([
//                'post_id' => $post->id,
//                'tag_id' => $tag,
//            ]);
//        }
        return redirect()->route('post.show', $post->id);

    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    /**
     * @throws NotFound
     */
    public function delete(Logger $log)
    {
        try {
            $post = Post::find(10);
        } catch (\HttpException $e) {
            $log->debug(
                $e->getMessage()
            );
        } catch (\Throwable $e) {
            $log->critical(
                self::ERROR_LOG . $e->getMessage()
            );
        }


        if ($post === null) {
            throw new NotFound('User not found');
        }

        $post->delete();
    }

    public function reDelete()
    {
        $post = Post::withTrashed()->find(1);
        $post->restore();
    }

    public function firstOrCreate()
    {
        $anoTherPost = [
            'title' => '10 title',
            'content' => '10 title',
            'image' => '10 image',
            'liks' => 8090,
            'is_published' => 1,
        ];
        $post = Post::firstOrCreate
        (
            [
                'title' => '10 title',
                'content' => '6 title',

            ],
            [
                'title' => '10 title',
                'content' => '10 title',
                'image' => '10 image',
                'liks' => 8090,
                'is_published' => 1,
            ]
        );
        return ($post->image);
    }

    public function updateOrCreate()
    {
        $anoTherPost = [
            'title' => '10 title',
            'content' => '10 title',
            'image' => '10 image',
            'liks' => 8090,
            'is_published' => 1,
        ];
        $post = Post::updateOrCreate
        (
            [
                'title' => '11 title',
                'content' => '11 title',

            ],
            [
                'title' => '13 title',
                'content' => '13 title',


                'is_published' => 1,
            ]
        );
        return ($post->image);
    }

}
