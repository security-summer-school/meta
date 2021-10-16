FILE	:= ../flag
FLAG	:= $(shell cat $(FILE))

build: generate
	docker build -f Dockerfile -t sss-web-01_example-name ..

run: generate build
	docker run -d -p 8001:80 --name sss-web-01_example-name sss-web-01_example-name

generate:
	sed 's/__TEMPLATE__/$(FLAG)/g' ../src/index.template.php > ../src/index.php

stop:
	docker stop sss-web-01_example-name

clean: stop
	docker rm sss-web-01_example-name

.PHONY: build run stop clean
