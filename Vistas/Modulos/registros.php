<div class="container mt-3 mb-4" id="ventana2">
 <div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Registro de la Comunidad</h3>
        </div>
    </div>
    <form action="" class="mt-3" id="formulario">
      <div class="row">
            <div class="col-5">
                    <Select class="form-control" id="manzanas">
                    <option value="">Seleccionar</option>   
                    <option value="Manzana nro 1">Manzana nro 1</option>
                    <option value="Manzana nro 2">Manzana nro 2</option>
                    <option value="Manzana nro 3">Manzana nro 3</option>
                    <option value="Manzana nro 4">Manzana nro 4</option>
                    <option value="Manzana nro 5">Manzana nro 5</option>
                    </Select>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-primary">
                        Buscar
                    </button>
                </div>
      </div>
    </form>

    <div class="row mt-3" id="tabla">
        <div class="col-12">
            <table class="table">
               <thead>
                   <th>Id</th>
                   <th>Familias nro:</th>
               </thead>
               <tbody id="fila">

               </tbody>
            </table>
        </div>
    </div>
      </div>
 </div>