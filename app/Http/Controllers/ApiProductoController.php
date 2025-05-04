<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ApiProductoController extends Controller
{
    // GET /api/productos
    public function index()
    {
        return response()->json(Producto::all(), 200);
    }

    // POST /api/productos
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:20',
            'precio' => 'required|numeric|min:0',
            'stock'  => 'required|integer|min:0',
        ]);

        $producto = Producto::create($validated);

        return response()->json($producto, 201);
    }

    // GET /api/productos/{id}
    public function show($id)
    {
        $producto = Producto::find($id);
        if (! $producto) {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }
        return response()->json($producto, 200);
    }

    // PUT/PATCH /api/productos/{id}
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        if (! $producto) {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }

        $validated = $request->validate([
            'nombre' => 'sometimes|required|string|max:20',
            'precio' => 'sometimes|required|numeric|min:0',
            'stock'  => 'sometimes|required|integer|min:0',
        ]);

        $producto->update($validated);

        return response()->json($producto, 200);
    }

    // DELETE /api/productos/{id}
    public function destroy($id)
    {
        $producto = Producto::find($id);
        if (! $producto) {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }
        $producto->delete();
        return response()->json(null, 204);
    }
}
