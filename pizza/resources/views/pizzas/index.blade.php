@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
　　　　　　　　@foreach($pizzas as $pizza)
              <div>
               {{ optional($pizza)->type }} - {{ optional($pizza)->name }} -{{ optional($pizza)->base }}
              </div>
             @endforeach　　
    </div>
</div>
