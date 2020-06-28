<button class="open-button" onclick="openForm()">Donate Using Phone Pe</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h6><strong>Donate using Phone Pe</strong></h6>
	<img src="{{ asset('img/Green_India_Phone_Pe.png')}}">
    
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<div class="text-white bg-success footer-clean">
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('mission') }}">Mission and Vision</a></li>
                        <li><a href="{{ route('ourvalues') }}">Our Value</a></li>
                        <li><a href="{{ route('ourfounder') }}">Our Founder</a></li>
                        <li><a href="{{ route('ourteam') }}">Our Team</a></li>
                        <li><a href="{{ route('awards') }}">Awards</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>Our Work</h3>
                    <ul>
                        <li><a href="{{ route('healthcare') }}">Health Care</a></li>
                        <li><a href="{{ route('billiontree') }}">One Billion Tree Plantation</a></li>
                        <li><a href="{{ route('greenwall') }}">Green Wall Research</a></li>
                        <li><a href="{{ route('nursery') }}">Green India Nursery</a></li>
                        <li><a href="{{ route('apbio') }}">AP Biodiversity</a></li>
                        <li><a href="{{ route('livlihood') }}">Livlihood</a></li>
                        <li><a href="{{ route('education') }}">Education</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>Get Involved</h3>
                    <ul>
                        <li><a href="{{ route('volunteer') }}">Volunteering&nbsp;</a></li>
                        <li><a href="{{ route('onlinefund') }}">Online Fundraising</a></li>
                        <li><a href="{{ route('smvolunteer') }}">SM Voluteering</a></li>
                        <li><a href="{{ route('crowdfund') }}">Crowd Fundraising</a></li>
                        <li><a href="{{ route('termsandconditions') }}">Terms and Conditions</a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-3 item social"><a href="http://www.facebook.com/greenindiatrust"><i class="icon ion-social-facebook"></i></a><a href="http://www.twitter.com/greenindiatrust"><i class="icon ion-social-twitter"></i></a><a href="https://www.instagram.com/gnitrust"><i class="icon ion-social-instagram"></i></a>
                    <p
                        class="copyright">Green India Trust © 2020</p>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/bs-init.js')}}"></script>
<script src="{{ asset('js/Contact-Form-v2-Modal--Full-with-Google-Map.js')}}"></script>
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/lightbox.min.js')}}"></script>
<script src="{{ asset('js/livereload.js')}}"></script>
<script src="{{ asset('js/smart-forms.min.js')}}"></script>
<script src="{{ asset('js/isotope.min.js')}}"></script>
<script>
    const counters = document.querySelectorAll('.counter');
	const speed = 200; // The lower the slower

	counters.forEach(counter => {
		const updateCount = () => {
			const target = +counter.getAttribute('data-target');
			const count = + counter.innerText;
			//console.log("target = "+target +",count = "+count);
			// Lower inc to slow and higher to slow
			const inc = target / speed;

			//console.log("inc = "+inc);
	    	if (count < target) {					
				counter.innerText = count + inc;
				setTimeout(updateCount, 1);
			} else {
				counter.innerText = target;
			}
		};
		updateCount();
	});
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>

</html>