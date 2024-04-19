<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


Se relizo cambios y corecciones en las malas practicas 

https://www.tutorialspoint.com/what-is-fillable-attribute-in-a-laravel-model


para quitar el protector 

```
protected $fillable = ['Nombre', 'Apellido', 'DPI', 'NIT','Fecha_nacimiento'];
```

para quitar el token o referenciar cual obketo/cosa

```
$data = $request->except("_token");
```

Se hizo tambien la refactorizacion de codigo:

```
//se llama a crear nuevo User
$personas = new Personas();
//se quita el token
$data = $request->except("_token");
//se evalua y crea el dato
$personas::create($data); 
//nos devuelve a la vista y no dara un mensaje de exitoso
return redirect()->route("personas.index")->with("success","Agregado con exito!");
```
El model para hacer llamado a base de datos:

```
class Personas extends Model
{
    use HasFactory;
    //se define el nombre de la tabla
    protected $table = 'personas';
    //se define la llave primaria
    Protected $primarykey = 'id';
    //se quita el protector
    protected $fillable = ['Nombre', 'Apellido', 'DPI', 'NIT','Fecha_nacimiento'];
    //hace referecnia de uno a mucho    
    public function personas(){
        return $this->hasMany(personas::class, 'personas');
    }
}
```

## RECOMENDACIONES

se debe de respectar los datos que se ingrean a la base datos 

```BD
CREATE TABLE:(
    'Agua' VARCHAR(50);
)
```

asi cuando debemos de llamar a un lado se debe respetar asi como en las views

```HTML
<label for="">Agua gaseosa</label>
<input type="text" name="Agua" id="Agua" class="form-control">
```

igual al momento de realizar validasiones.