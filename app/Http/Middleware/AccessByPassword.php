<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccessByPassword
{
    public function handle(Request $request, Closure $next)
    {
        // Password che condividerai con i tuoi clienti
        $accessPassword = 'password';

        // Controlla se l'utente ha già inserito correttamente la password
        // oppure se la query string 'password' è presente e corretta
        if ($request->session()->get('authenticated') !== true && $request->query('password') !== $accessPassword) {
            // Se la password è sbagliata o non è stata ancora inserita, ritorna un messaggio di errore
            // o reindirizza a una pagina di login personalizzata.
            return response('Access negated', 401);
        }

        // Se la password nella query string è corretta, imposta il flag di autenticazione nella sessione
        if ($request->query('password') === $accessPassword) {
            $request->session()->put('authenticated', true);
        }

        return $next($request);
    }
}
