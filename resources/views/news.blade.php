@extends('master.layout')

@section('title')
    من نحن ؟
@endsection

@section('ar')
    class="arabic-input"
@endsection

@section('active_a')
    active
@endsection
@section('content')
<article class="card">
    <img
      class="card__background"
      src="images/face4.jpg"
      alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
      width="1920"
      height="2193"
    />
    <div class="card__content | flow">
      <div class="card__content--container | flow">
        <h2 class="card__title">Colombia</h2>
        <p class="card__description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
          labore laudantium deserunt fugiat numquam.
        </p>
      </div>
      <button class="card__button">Read more</button>
    </div>
  </article>
  @endsection