@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-100">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Why a developer?
            </h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">Read more</a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2017/11/27/21/31/computer-2982270_960_720.jpg" width="700" alt="">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-4xl font-extrabold text-gray-600">
            Web developer
        </h2>
        <p class="py-8 text-gray-500 text-l">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium nam hic quisquam eveniet, expedita ab autem aperiam, cum placeat voluptas laborum voluptates unde cupiditate blanditiis alias explicabo saepe facilis modi.
        </p>
        <p class="font-extrabold text-gray-600 text-l pb-9">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        </p>
        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Find out more
        </a>
    </div>
</div>

<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        Expert...
    </h2>
    <span class="font-extrabold block text-4xl py-1">
        UX Design
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Project Management
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Digital strategy
    </span>
</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10">
        Recent Posts
    </h2>
    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, vero libero! Magni, distinctio commodi? Nihil, ipsum. Atque, aliquam obcaecati. Ut nihil error sapiente illo eius illum deserunt, natus officiis consequuntur?
    </p>
</div>


@endsection