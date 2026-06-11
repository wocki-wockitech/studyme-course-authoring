FROM golang:1.22 AS ___
WORKDIR /app
COPY go.mod go.sum ./
RUN go mod download
COPY . .
RUN CGO_ENABLED=0 go build -o /server ./cmd/server

FROM ___
COPY --from=___ /server /server
EXPOSE 8080
CMD ["/server"]
