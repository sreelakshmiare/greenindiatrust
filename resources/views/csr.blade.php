@extends('layouts.index')
@section('center')

<section class = "section-about">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">

                    <h4 class="text-justify text-success">Corporate Social Responsibility Opportunity</h4>
                      <h5 class = "text-justify text-success">Why should you assocaite with Green India Trust?</h5>

						<p class="text-justify text-success">According to statistics, India losing around 333 acres forest
                        daily in several reason and also pollution to killed 1.24 million Indians, half of them younger
                        than 70 in years.
                        On health care the 1.6 million Indians died due to poor quality of care in there are health.
                        <br/>
                        For India to become an economic power to reckon with, it is essential
                        that varied stakeholders such as Government,
                        Corporate and individuals come together to solve the these two major problem in India
						</p>


						<ol class="orderlist text-justify text-success">
							<li class="text-justify text-success">To focusing the environment protection and awareness for the environment.</li>
							<li class="text-justify text-success">To focusing the health care, livelihood and education in the rural area.</li>

						</ol>



						<p class="text-justify text-success">Against the above scenario, Green India Trust’s work is
                            extremely relevant – with vision that “Green India Trust is the environmental voice of Indian citizens,
                            standing for environmental justice, sustainable development and participatory democracy.”
						</br>

                       It’s home-grown, non-patented innovative technology coupled with sustained local fundraising
                         has enabled it to scale up from 10000 plantation in the year of staring 2008 to one
                          billion trees are distrbuted and plantation in the reral area and we are across
                          three digit medical camp conducting the rural areas.</p>

             <h5 class = "text-justify text-success">What is Companies Act 2013?</h5>

             <p class="text-justify text-success">The Companies Act 2013 has taken a bold step to introduce
                the culture of Corporate Social Responsibility (CSR) amidst Indian corporates by giving
                a minimum expenditure towards social activities.
                <br/>
                According to the Section 135 of Companies Act 2013, every company with net
                worth of INR 500 crores or more or a turnover of INR 1000 crores or more,
                or a net profit of INR five crores or more, would be mandated to spend
                at least 2 per cent of the net-profits (before tax) of the immediately
                 preceding three years on CSR activities. The accounting firm Ernst &
                  Young estimates that the law would cover over 2,500 companies in India
                  and generate over U.S. $2 billion of CSR spending in local communities.
             </p>
             <p class="text-justify text-success"> Activities eligible for CSR spend are –
              <ol class="orderlist text-justify text-success">
                    <li class="text-justify text-success">Plantation and environment awareness programs</li>
                    <li class="text-justify text-success">Education </li>
                    <li class="text-justify text-success"> Empowering women and promoting gender equality </li>
                    <li class="text-justify text-success">Improvement of health</li>
                    <li class="text-justify text-success">Skill Development </li>
                    <li class="text-justify text-success"> Contribution towards Central and State Government funds for socio-economic development</li>
               </ol>
             </p>

             <p class="text-justify text-success">For more details, please contact us at <a href ="#">greenindia@gitrust.org</a> or <a href ="#"> chairman@gitrust.org</a> </p>

             <p class="text-justify">

                <a href="#" data-target="#modalIMG" data-toggle="modal"
                class="btn btn-outline-success active btn-lg text-right bg-success border-success shadow-lg"
                role="button" data-bs-hover-animate="pulse">
                        Read More
                    </a>

              <!--<a class=" text-success" href = "withgit.blade.php">Read More</a> -->

               </p>

			 </div>

        </div>
    </div>

    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body mb-0 p-0">
                    <embed src="{{ asset('img/gni_csr.pdf')}}" width="800px" height="800px" />
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center" data-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
    $( 'a a' ).remove();
		document.documentElement.setAttribute("lang", "en");
		document.documentElement.removeAttribute("class");
	</script>
@endsection
