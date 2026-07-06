@extends('layout')

@section('title','บทความทั้งหมด')
    
@section('content')
    <h2>บทความทั้งหมด</h2>
   <hr>
   @foreach($blogs as $item)
   <h2>{{ $item ['title']  }}</h2>
   <p>{{ $item ['content'] }}</p>

   @if ($item['status'] == true  )
   <p class="text-success">สถานะ :  เผยแพร่</p>
   @else
   <p class="text-danger">สถานะ : ไม่เผยแพร่</p>
   @endif 



   
   @endforeach

@endsection
