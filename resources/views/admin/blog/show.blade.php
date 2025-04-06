@extends('layouts.admin')
@section('title', 'Blog Post')
@section('content')

<section class="w-full md:w-11/12 mx-auto p-4">
    <div class="w-11/12 md:w-9/12 mx-auto overflow-hidden h-fit md:h-96">
        <img src="{{asset('images/kindergarten.jpg')}}" alt="post image" class="w-full object-cover">
    </div>
    <div class="w-11/12 md:w-9/12 mx-auto flex items-center space-x-4 my-4">
        <span class="text-green-700 text-lg font-semibold">Academic</span>
        <span class="text-gray-600 text-lg">Posted on: 12-12-2020</span>
    </div>
    <div class="w-11/12 md:w-9/12 mx-auto my-4">
       <h3 class="text-2xl md:text-4xl text-green-800 my-4">This is the title of the blog post</h3>

       <p class="text-gray-600 text-justify text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sed magnam, animi consequatur harum atque in natus dolore quaerat provident, molestiae itaque accusamus delectus iste qui ullam necessitatibus nam sapiente!
       Molestiae quasi distinctio accusantium, nesciunt repellat nam doloribus explicabo laborum neque architecto necessitatibus quo ipsa cum id in consequuntur modi rem maxime amet nisi eum ex soluta dolor! Soluta, et.
       Sunt odio dolorem saepe possimus ratione tempora iste, itaque rem eius ipsum magnam nostrum cupiditate non architecto exercitationem! Commodi optio ullam sint magni in tempora veniam asperiores cum reiciendis dolor.
       Optio qui omnis ut ab illo incidunt delectus tempora cumque ipsa, dolor eius explicabo quas rerum repellendus. Nam, voluptatum odit, quisquam explicabo, ea quasi voluptate velit quis aut ab nulla.
       Expedita esse, laudantium officia, cupiditate, minima accusantium nulla distinctio enim consequuntur ut reiciendis doloribus illum labore molestias obcaecati vero reprehenderit minus suscipit at tempora similique quis eligendi. Voluptatem, ea odio!</p>
    </div>

    <div class="w-fit mx-auto flex my-4">
        <button class="py-1 px-2 mx-2 bg-green-700 hover:bg-gray-700 text-white rounded-md"><i class="fa fa-pencil mx-2"></i><a href="#">Update post</a></button>

        <form action="">
            <button class="py-1 px-2 mx-2 bg-red-700 hover:bg-gray-700 text-white rounded-md"><i class="fa fa-trash mx-2"></i><a href="#">Delete post</a></button>
        </form>
    </div>
</section>
@endsection
