<x-main>
    <x-slot:mainTitle> Homepage </x-slot>


    <!-- searchbar -->
    <div class="container">
        <x-search_bar />
        @foreach($announcements as $announcement)
    <img src="{{ Storage::url($announcement->url_image)}}" alt="">
    @endforeach
    <!-- categories box -->
    <x-categories />
    

    <div class="buy-sell">
        <div class="row justify-content-center align-items-center">
          <div class="col-4 box-buy-sell me-4">
            <div class="text">
              <h2>Scegli presto.it</h2>
            </div>
            <div>
              <span>Compra e vendi in piena libertà.</span>
            </div>
          </div>
  
          <div class="col-4 box-buy-sell mx-2 text-center">
            <div>
              <img class="img-fluid" src="{{ asset('img/vendi_gratis.png') }}" alt="Vendi gratis">
            </div>
            <div>
              <button>Vendi gratis</button>
            </div>
          </div>
  
          <div class="col-4 box-buy-sell ms-4 text-center">
            <div>
              <img class="img-fluid" src="{{ asset('img/compra_online.png') }}" alt="Compra onlin">
            </div>
            <div>
              <button>Compra online</button>
            </div>
          </div>
        </div>
    </div>



    <!-- card annunci in primo piano -->
    @foreach($announcements as $announcement)
    <x-card-announcement>
                <x-slot:title>{{$announcement->title}}</x-slot>
                <x-slot:category>{{$announcement->category_id}}</x-slot>
                <x-slot:url_image>{{$announcement->url_image}}</x-slot>
                <x-slot:price>{{$announcement->price}}</x-slot>
                <x-slot:description>{{$announcement->description}}</x-slot>
    </x-card-announcement>
    @endforeach

    </div>
    


    

</x-main>
