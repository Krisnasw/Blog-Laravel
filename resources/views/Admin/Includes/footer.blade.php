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
		                </p>
		            </div>
		        </footer>
		    </div>
		</div>
	</body>

    @if (Session::has('sweet_alert.alert'))
        <script>
          swal({!! Session::get('sweet_alert.alert') !!});
        </script>
    @endif
    {{ Html::script('assets/js/jquery.min.js') }}
    {{ Html::script('assets/js/bootstrap.min.js') }}

    {{-- DatecPicker  --}}
    {{ Html::script('http://momentjs.com/downloads/moment-with-locales.min.js') }}
    {{ Html::script('assets/plugin/datepicker/js/bootstrap-material-datetimepicker.js') }}


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

            $('#date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});
        });
    </script>
</html>
