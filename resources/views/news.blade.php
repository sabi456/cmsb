@extends('master.layout')

@section('title')
  أخبار 
@endsection

@section('ar')
    class="arabic-input"
@endsection

@section('inkh')
    {{ route('pack')}}
@endsection

@section('active_n')
    active
@endsection
@section('content')
<div class="main">
  <ul class="cards"> 
    
    @foreach($data as $item)
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <span class="note">{{ $item['statu'] }}</span>
          <img src="data:image/jpeg;base64,{{ base64_encode($item['item']->image) }}" alt="mixed vegetable salad in a mason jar." />
          <span class="card_price">{{ $item['date_ar'] }}</span>
        </div>
        <div class="card_content">
          <h2 class="card_title">{{ $item['item']->title }}</h2>
          <div class="card_text">
            <p style="line-height: 2em; font-weight: 500">
              {!! Str::limit($item['item']->detail, 400) !!}
            </p>
            <hr>
            <div class="container text-center">
              <a href="{{route('single_news', $item['item']->id)}}" class="btn contact_btn"">قراءة المزيد</a>
            </div>
          </div>
        </div>
      </div>
    </li>
    @endforeach
  </ul>
</div>
@endsection
