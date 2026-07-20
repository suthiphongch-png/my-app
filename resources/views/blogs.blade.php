@extends('layout')

@section('title','บทความทั้งหมด')
    
@section('content')
<h2 class="text-center py-2" >บทความ</h2>
<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">title</th>
      <th scope="col">Content</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
     @foreach($blogs as $item)
    <tr>
      <td>{{$item ['title']}}</td>
      <td>{{$item ['content']}}</td>
      <td>
         @if ($item['status'] == true  )
          <span class="btn btn-success">สถานะ :  เผยแพร่</span>
          @else
          <span class="btn btn-success">สถานะ : ไม่เผยแพร่</span>
          @endif  
      </td>
    </tr>
    @endforeach

@endsection
