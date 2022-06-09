@extends('layout.master')
@section('css', 'backoffice.css')
@section('title', 'Qaftani | Admin')

<nav class="adminnav">
    <div class="logo">
        <a href="/welcome">
            <img src="../assets/logo/Logo.png" alt="logo">
        </a>
        <hr>
        <span>Administrator</span>
        
        
    </div>
</nav>
@section('content')
<div>
    <form action = "/create" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          <input type="text" class="form-control" placeholder="cartId" name="cartId">
          <input type="text" class="form-control" placeholder="empty?" name="empty">
          <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
        </form>
</div>


@endsection