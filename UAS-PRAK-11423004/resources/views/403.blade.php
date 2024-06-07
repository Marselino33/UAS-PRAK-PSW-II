public function render($request, Throwable $exception)
    {
        if ($exception instanceof HttpException && $exception->getStatusCode() == 403) {
            // Hanya mengarahkan ke halaman khusus jika kesalahan adalah 500
            return response()->view('error.403', [], 403);
        }
    
        if ($exception instanceof NotFoundHttpException) {
            return response()->view('error.404', [], 404);
        }

        return parent::render($request, $exception);
    }