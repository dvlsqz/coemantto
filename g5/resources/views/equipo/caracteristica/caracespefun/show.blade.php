@extends ('layouts.admin')
@section ('contenido')

<section class="content-header">
      <h1>
        Ficha Técnica
      <small>Caracteristica especial</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-edit"></i>   Ficha Técnica</a></li>
      <li class="active">Caracteristica especial</li>
      </ol>
</section>
	<section class="content">
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Nueva Caracteristica especial</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->


				<div class="box-body col-md-12">
					<div class="form-group">
						<label for="direccion_fab">Nombre caracteristica especial</label>
            <p>{{$caracespefun->nombre_caracteristica_especial}}</p>
					</div>



				</div>

				<!-- /.box-body -->

        <div class="box-footer">

          <a href="{{route('caracespefun.index')}}">
            <button type="button" name="atras" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> </button>
          </a>
        </div>

		</div>
		<!-- /.box -->


	</div>

</div>
</section>
@push ('scripts')
<script>
$('#liEq').addClass("treeview active");
$('#liEspe').addClass("treeview active");
$('#liCesp').addClass("active");

</script>
@endpush
@endsection
