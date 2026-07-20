@extends('layout')

@section('title','เพิ่มบทความ')

@section('content')

<h1 class="text-center py-3">เพิ่มบทความใหม่</h1>
<form>
    <div class="form-group mb-3">
        <label for="title" class="form-label">ชื่อบทความ</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
   
    <div class="form-group mb-3">
        <label for="content" class="form-label">เนื้อหา</label>
        <textarea name="content" class="form-control" cols="30" rows="5" ></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" value="บันทึก" class="btn btn-primary">
        <a href="/blogs" class="btn btn-secondary">บทความทั้งหมด</a>
    </div>
</form>
@endsection 