<x-main>
    <x-slot:mainTitle>Categorie</x-slot:mainTitle>
    @if($category->announcements->isNotEmpty())
    @foreach($category->announcements as $announcement)
    <p>Ciao</p>
    @endforeach
    @endif
    
</x-main>