				<footer class="footer">
		            <div class="container-fluid">
		                <nav class="pull-left">
		                    <ul>
		                        <li>
		                            <a href="#">
		                                Home
		                            </a>
		                        </li>
 
		                    </ul>
		                </nav>
		                <p class="copyright pull-right">
		                    Made with <i class="fa fa-headphones" style="color:#2E8ECE"></i> & <i class="fa fa-heart"style="color:#EA6153"></i> from Surakarta, Indonesia.
		                    {{-- &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, <p class="love">Made with <i class="icon ion-heart"></i> by Christiawan Ekor</p> --}}
		                </p>
		            </div>
		        </footer>
		    </div>
		</div>
	</body>

    {{ Html::script('assets/js/jquery.min.js') }}
    {{ Html::script('assets/js/bootstrap.min.js') }}

	{{ Html::script('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}

    {{ Html::script('bower_components/moment/moment.js') }}
    {{ Html::script('assets/js/bootstrap-multiselect.js') }}

	{{-- Checkbox, Radio & Switch Plugins --}}
    {{ Html::script('assets/js/bootstrap-checkbox-radio-switch.js') }}

	{{-- Charts Plugin --}}
    {{ Html::script('assets/js/chartist.min.js') }}

	{{-- Notifications Plugin    --}}
    {{ Html::script('assets/js/bootstrap-notify.js') }}

    {{-- Light Bootstrap Table Core javascript and methods for Demo purpose --}}
    {{ Html::script('assets/js/light-bootstrap-dashboard.js') }}


	{{-- Light Bootstrap Table DEMO methods, don't include it in your project! --}}
    {{ Html::script('assets/js/demo.js') }}
	
	<script type="text/javascript">
        $(document).ready(function() {
            $('#multiselect').multiselect();
            $('.datepicker').datepicker();
            var now = moment();
        });
    </script>
</html>