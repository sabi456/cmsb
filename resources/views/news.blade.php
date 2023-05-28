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
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <img src="images/face1.jpg" alt="mixed vegetable salad in a mason jar." />
          <span class="card_price"><span>$</span>9</span>
        </div>
        <div class="card_content">
          <h2 class="card_title">Farmstand Salad</h2>
          <div class="card_text">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem aperiam dignissimos aspernatur cupiditate optio corporis nihil, rem veniam, voluptates quasi accusamus? Voluptas laborum accusantium dolor nostrum impedit illo sequi in?
            </p>
            <hr />
            <p>Served with your choice of dressing on the side: <strong>housemade ranch</strong>, <strong>cherry balsamic
                vinaigrette</strong>, <strong>creamy chipotle</strong>, <strong>avocado green goddess</strong>, or <strong>honey mustard</strong>. Add your choice
              of protein for $2 more.
            </p>
          </div>
        </div>
      </div>
    </li>

    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <img src="images/face4.jpg" alt="a Reuben sandwich on wax paper." />
          <span class="card_price"><span>$</span>18</span>
        </div>
        <div class="card_content">
          <h2 class="card_title">Ultimate Reuben</h2>
          <div class="card_text">
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius quo beatae velit incidunt pariatur quia iste quod, possimus autem voluptate nesciunt, nulla sit deleniti! Fugit ab eum ea ullam illum.
            </p>
            <p>Every element of this extraordinary sandwich is handcrafted in our kitchens, from the rye
              bread baked from our secret recipe to the cave-aged Swiss cheese, right down to the
              pickle. The only thing we didn't make on the premises is the toothpick ( but we're
              looking into how to do that).
            </p>
            <hr />
            <p>This unforgettable sandwich has all of the classic Reuben elements: <strong>corned beef</strong>, <strong>rye
                bread</strong>, <strong>creamy Russian dressing</strong>, <strong>sauerkraut</strong>, plus a <strong>sweet gherkin pickle</strong>.
              No substitions please!
            </p>
            <p>Add a side of <strong>french fries</strong> or <strong>sweet potato fries</strong> for $2 more, or our
              <strong>housemade pub chips</strong> for $1.
            </p>
          </div>
        </div>
      </div>
    </li>

    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <span class="note">Seasonal</span>
          <img src="images/face5.jpg" alt="A side view of a plate of figs and berries." />
          <span class="card_price"><span>$</span>16</span>
        </div>
        <div class="card_content">
          <h2 class="card_title">Fig &amp; Berry Plate</h2>
          <div class="card_text">
            <p>A succulent sextet of fresh figs join with a selection of bodacious seasonal berries in
              this refreshing, shareable dessert.
            </p>
            <hr />
            <p>Choose your drizzle: <strong>cherry-balsamic vinegar</strong>, <strong>local honey</strong>, or
              <strong>housemade chocolate sauce</strong>.
            </p>
          </div>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <span class="note">Seasonal</span>
          <img src="images/face5.jpg" alt="A side view of a plate of figs and berries." />
          <span class="card_price"><span>$</span>16</span>
        </div>
        <div class="card_content">
          <h2 class="card_title">Fig &amp; Berry Plate</h2>
          <div class="card_text">
            <p>A succulent sextet of fresh figs join with a selection of bodacious seasonal berries in
              this refreshing, shareable dessert.
            </p>
            <hr />
            <p>Choose your drizzle: <strong>cherry-balsamic vinegar</strong>, <strong>local honey</strong>, or
              <strong>housemade chocolate sauce</strong>.
            </p>
          </div>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <span class="note">Seasonal</span>
          <img src="images/face5.jpg" alt="A side view of a plate of figs and berries." />
          <span class="card_price"><span>$</span>16</span>
        </div>
        <div class="card_content">
          <h2 class="card_title">Fig &amp; Berry Plate</h2>
          <div class="card_text">
            <p>A succulent sextet of fresh figs join with a selection of bodacious seasonal berries in
              this refreshing, shareable dessert.
            </p>
            <hr />
            <p>Choose your drizzle: <strong>cherry-balsamic vinegar</strong>, <strong>local honey</strong>, or
              <strong>housemade chocolate sauce</strong>.
            </p>
          </div>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <span class="note">Seasonal</span>
          <img src="images/face5.jpg" alt="A side view of a plate of figs and berries." />
          <span class="card_price"><span>$</span>16</span>
        </div>
        <div class="card_content">
          <h2 class="card_title">Fig &amp; Berry Plate</h2>
          <div class="card_text">
            <p>A succulent sextet of fresh figs join with a selection of bodacious seasonal berries in
              this refreshing, shareable dessert.
            </p>
            <hr />
            <p>Choose your drizzle: <strong>cherry-balsamic vinegar</strong>, <strong>local honey</strong>, or
              <strong>housemade chocolate sauce</strong>.
            </p>
          </div>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <span class="note">Seasonal</span>
          <img src="images/face5.jpg" alt="A side view of a plate of figs and berries." />
          <span class="card_price"><span>$</span>16</span>
        </div>
        <div class="card_content">
          <h2 class="card_title">Fig &amp; Berry Plate</h2>
          <div class="card_text">
            <p>A succulent sextet of fresh figs join with a selection of bodacious seasonal berries in
              this refreshing, shareable dessert.
            </p>
            <hr />
            <p>Choose your drizzle: <strong>cherry-balsamic vinegar</strong>, <strong>local honey</strong>, or
              <strong>housemade chocolate sauce</strong>.
            </p>
          </div>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <span class="note">Seasonal</span>
          <img src="images/face5.jpg" alt="A side view of a plate of figs and berries." />
          <span class="card_price"><span>$</span>16</span>
        </div>
        <div class="card_content">
          <h2 class="card_title">Fig &amp; Berry Plate</h2>
          <div class="card_text">
            <p>A succulent sextet of fresh figs join with a selection of bodacious seasonal berries in
              this refreshing, shareable dessert.
            </p>
            <hr />
            <p>Choose your drizzle: <strong>cherry-balsamic vinegar</strong>, <strong>local honey</strong>, or
              <strong>housemade chocolate sauce</strong>.
            </p>
          </div>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <span class="note">Seasonal</span>
          <img src="images/face5.jpg" alt="A side view of a plate of figs and berries." />
          <span class="card_price"><span>$</span>16</span>
        </div>
        <div class="card_content">
          <h2 class="card_title">Fig &amp; Berry Plate</h2>
          <div class="card_text">
            <p>A succulent sextet of fresh figs join with a selection of bodacious seasonal berries in
              this refreshing, shareable dessert.
            </p>
            <hr />
            <p>Choose your drizzle: <strong>cherry-balsamic vinegar</strong>, <strong>local honey</strong>, or
              <strong>housemade chocolate sauce</strong>.
            </p>
          </div>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <span class="note">Seasonal</span>
          <img src="images/face5.jpg" alt="A side view of a plate of figs and berries." />
          <span class="card_price"><span>$</span>16</span>
        </div>
        <div class="card_content">
          <h2 class="card_title">Fig &amp; Berry Plate</h2>
          <div class="card_text">
            <p>A succulent sextet of fresh figs join with a selection of bodacious seasonal berries in
              this refreshing, shareable dessert.
            </p>
            <hr />
            <p>Choose your drizzle: <strong>cherry-balsamic vinegar</strong>, <strong>local honey</strong>, or
              <strong>housemade chocolate sauce</strong>.
            </p>
          </div>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image">
          <span class="note">Seasonal</span>
          <img src="images/face5.jpg" alt="A side view of a plate of figs and berries." />
          <span class="card_price"><span>$</span>16</span>
        </div>
        <div class="card_content">
          <h2 class="card_title">Fig &amp; Berry Plate</h2>
          <div class="card_text">
            <p>A succulent sextet of fresh figs join with a selection of bodacious seasonal berries in
              this refreshing, shareable dessert.
            </p>
            <hr />
            <p>Choose your drizzle: <strong>cherry-balsamic vinegar</strong>, <strong>local honey</strong>, or
              <strong>housemade chocolate sauce</strong>.
            </p>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
  @endsection