@extends('layouts.main')

@section('container')
    <h1 class="text-center my-4">About Us</h1>

    <div class="row">
        <div class="col-md-3 my-3 text-center">
            <img src="img/{{ $image }}" alt="{{ $nama }}" width="200">
            <h4 class="mt-3">{{ $nama }}</h4>
            <h4>{{ $email }}</h4> 
        </div>
        <div class="col-md-9">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam adipisci ad ut quibusdam maiores nihil vero ab eveniet molestiae dolores sapiente facilis qui expedita excepturi quidem unde eum ratione accusamus blanditiis in velit cumque, voluptate iste eaque. Praesentium aspernatur illum ad commodi qui veritatis tempore temporibus harum veniam tenetur quam voluptas, perspiciatis aliquid, sequi iste excepturi ducimus repellat? Pariatur officiis maxime ullam a facilis! Sed voluptates laboriosam animi omnis odio? Illum possimus reiciendis quasi fugit necessitatibus maxime, nemo at. Facere consectetur tenetur ex incidunt suscipit totam amet odit ipsa, veniam modi sequi. Soluta repellendus, voluptates nostrum a vero tempore totam dolor consectetur alias quas itaque nesciunt dicta ipsum eligendi error, molestiae pariatur odit? Dolorum placeat perferendis voluptatum nobis laboriosam iusto ullam cumque est earum, facilis aliquam, veniam sapiente expedita culpa tempora, aut enim. Error a velit voluptates laboriosam. Nostrum rem error placeat accusantium fugit assumenda natus harum rerum, facilis nobis, alias quia illum reprehenderit, quibusdam facere? Saepe eligendi commodi quae atque quidem modi minima fugiat suscipit minus? Eius a nihil veniam harum in, magnam accusantium laboriosam itaque at, eaque debitis. Velit nam, tenetur corrupti ab in veniam aut qui commodi laudantium assumenda quasi explicabo animi itaque non voluptates dolores accusantium?</p>  
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-9">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, ad quis. Totam beatae libero quaerat, temporibus repudiandae laudantium quasi pariatur delectus accusantium doloribus tenetur perspiciatis quisquam velit, ipsam deleniti minima saepe. Obcaecati earum mollitia laboriosam ipsa assumenda perspiciatis facere, ratione fugit architecto aperiam modi? Sit, dicta minus at numquam quod est eveniet sunt sint dolorem unde quasi recusandae cumque, fuga ducimus, ipsam nesciunt hic. Nihil iusto quos aut enim quidem deserunt hic. Fuga quas a similique accusantium non doloribus laboriosam, tempore perspiciatis expedita molestiae earum sunt eaque! Sapiente sint dolores autem reprehenderit corrupti vitae, rem nemo recusandae quia molestias minus!</p>
        </div>
        <div class="col-md-3">
            <img src="img/{{ $image }}" alt="{{ $nama }}" width="200">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum facilis possimus dignissimos a velit. Rem similique repudiandae illo excepturi dicta eligendi, non, eum aut ipsam, id impedit odio ducimus omnis?</p>
        </div>
    </div>

@endsection