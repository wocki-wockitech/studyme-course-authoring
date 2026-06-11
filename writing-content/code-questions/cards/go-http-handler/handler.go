package main

import "net/http"

func healthHandler(w http.ResponseWriter, r *http.Request) {
	w.Header().Set("Content-Type", ___)
	w.___
	w.Write([]byte(`{"status":"ok"}`))
}
