    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Our Investement Plans</p>
        </div>
        


        <div class="row align-items-center">
        @foreach ($plans as $plan)

          <div class="col-lg-4">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>{{ $plan->name }}</h3>
              <h4>{{ $plan->time }}</h4>
              <ul>
                <li><i class="bx bx-check"></i> Maximum Amount: <span>{{ $plan->max_amount }}</span></li>
                <li><i class="bx bx-check"></i> Minimum Amount: <span>{{ $plan->min_amount }}</span></li>
                <li><i class="bx bx-check"></i> R.O.I: <span>{{ $plan->roi }}</span></li>
                <li><i class="bx bx-check"></i> Plan Description : <br> {{ $plan->description }}</li>
  
              </ul>
              <a href="/register" class="get-started-btn">Get Started</a>
            </div>
          </div>
          @endforeach


        </div>
    

      </div>
    </section><!-- End Pricing Section -->