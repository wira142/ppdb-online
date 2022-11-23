<div class="d-flex gap-4 list-card-schools flex-wrap">
  @for ($i = 0; $i < 7; $i++)
    <div class="card" style="width: 15rem;">
      <img src="{{ asset('storage/schools_image/school_building.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title fw-bold">Title Schools</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea necessitatibus beatae ducimus
          sunt aut!
        </p>
        <div class="text-end">
          <a href="#" class="btn btn-success">View More</a>
        </div>
      </div>
    </div>
  @endfor
</div>
