@extends('layouts.admin')

@section('content')
<h1>Ajustes del Sistema</h1>

<hr>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Configuraciones del Sistema</h4>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                {{-- Nombre --}}
                                <div class="col-md-4">
                                    <label for="nombre" class="form-label">Nombre (*)</label>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-building mb-2"></i></span>

                                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" 
                                            class="form-control @error('nombre') is-invalid @enderror" 
                                            placeholder="Nombre de la empresa" required>

                                        @error('nombre')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>{{-- /.input-group --}}
                                </div>{{-- /.col-md-4 --}}

                                {{-- Descripción --}}
                                <div class="col-md-8">
                                    <label for="descripcion" class="form-label">Descripción (*)</label>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-tag mb-2"></i></span>
                                        <input type="text" name="descripcion" id="descripcion"  
                                            placeholder="Breve descripción de la actividad o sector" 
                                            class="form-control @error('descripcion') is-invalid @enderror"
                                            value="{{ old('descripcion') }}" required>

                                        @error('descripcion')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>{{-- /.input-group --}}
                                </div>{{-- /.col-md-8 --}}
                            </div>{{-- /.row --}}

                            <div class="row">
                                {{-- Sucursal --}}
                                <div class="col-md-4">
                                    <label for="sucursal" class="form-label">Sucursal (*)</label>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-shop mb-2"></i></span>
                                        <input type="text" name="sucursal" id="sucursal" placeholder="Ej: Casa Matriz" 
                                            class="form-control @error('sucursal') is-invalid @enderror" 
                                            value="{{ old('sucursal') }}" required>

                                        @error('sucursal')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>{{-- /.input-group --}}
                                </div>{{-- /.col-md-4 --}}

                                {{-- Dirección --}}
                                <div class="col-md-8">
                                    <label for="direccion" class="form-label">Dirección (*)</label>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-geo-alt mb-2"></i></span>
                                        <textarea name="direccion" id="direccion" rows="1" 
                                            class="form-control @error('direccion') is-invalid @enderror" required
                                            placeholder="Calle, Número, Ciudad y País">{{ old('direccion')}}
                                        </textarea>
                                        
                                        @error('direccion')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>{{-- /.input-group --}}
                                </div>{{-- /.col-md-8 --}}
                            </div>{{-- /.row --}}

                            <div class="row">
                                {{-- Teléfonos --}}
                                <div class="col-md-6">
                                    <label for="telefonos" class="form-label">Teléfonos (*)</label>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-telephone mb-2"></i></span>
                                        <input type="text" name="telefonos" id="telefonos" 
                                            placeholder="Ej: +591 64454432, 2854343" 
                                            class="form-control @error('telefonos') is-invalid @enderror" 
                                            value="{{ old('telefonos') }}" required>

                                        @error('telefonos')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>{{-- /.input-group --}}
                                </div>{{-- /.col-md-6 --}}

                                {{-- Correo Electrónico --}}
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Correo Electrónico (*)</label>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-envelope mb-2"></i></span>
                                        <input type="text" name="email" id="email" 
                                            placeholder="Ej: info@miempresa.com" 
                                            class="form-control @error('email') is-invalid @enderror" 
                                            value="{{ old('email') }}" required>

                                        @error('email')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>{{-- /.input-group --}}
                                </div>{{-- /.col-md-6 --}}
                            </div>{{-- /.row --}}
                            
                            <div class="row">
                                {{-- Sitio Web --}}
                                <div class="col-md-6">
                                    <label for="pagina_web" class="form-label">Sitio Web (Opcional)</label>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-globe mb-2"></i></span>
                                        <input type="url" name="pagina_web" id="pagina_web" 
                                            placeholder="Ej: https://www.miempresa.com" 
                                            class="form-control @error('pagina_web') is-invalid @enderror" 
                                            value="{{ old('pagina_web') }}">

                                        @error('pagina_web')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>{{-- /.input-group --}}
                                </div>{{-- /.col-md-6 --}}
                                
                                {{-- Divisa --}}
                                <div class="col-md-6">
                                    <label for="divisa" class="form-label">Divisa (*)</label>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-currency-dollar mb-2"></i></span>
                                        <select name="divisa" class="form-control" required>
                                            <option value="">-- Seleccione una divisa --</option>
                                            @foreach ($divisas as $divisa)
                                                <option value="{{ $divisa['symbol'] }}">
                                                    {{ $divisa['name'] }} ({{ $divisa['symbol'] }})
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('divisa')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>{{-- /.input-group --}}
                                </div>{{-- /.col-md-6 --}}
                            </div>{{-- /.{{-- /.row --}}
                        </div>{{-- /.col-md-10 --}}

                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="logo" class="form-label">Logo (*)</label>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-image mb-2"></i></span>

                                        <input type="file" name="logo" id="logo" 
                                            class="form-control @error('logo') is-invalid @enderror" 
                                            accept="image/*" required>

                                        @error('logo')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>{{-- /.input-group --}}
                                </div>{{-- /.col-md-12 --}}
                            </div>{{-- /.row --}}

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="imagen_login" class="form-label">Imagen de Login (*)</label>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-camera mb-2"></i></span>

                                        <input type="file" name="imagen_login" id="imagen_login" 
                                            class="form-control @error('imagen_login') is-invalid @enderror" 
                                            accept="image/*" required>

                                        @error('imagen_login')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>{{-- /.input-group --}}
                                </div>{{-- /.col-md-12 --}}
                            </div>{{-- /.row --}}
                        </div>{{-- /.col-md-2 --}}
                    </div>{{-- /.row --}}
                </form>
            </div>{{-- /.card-body --}}
        </div>{{-- /.card --}}
    </div>{{-- /.col-md-12 --}}
</div>{{-- /.row --}}
@endsection