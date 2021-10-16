FILE	:=../flag
FLAG	:=$(shell cat $(FILE))

build: generate
	docker build -f Dockerfile -t sss-web-ctf-final_h-duck ..

run: generate build
	docker run -d -p 8001:80 --name sss-web-ctf-final_h-duck sss-web-ctf-final_h-duck

generate:
	sed 's/__TEMPLATE__/$(FLAG)/g' ../src/vars.template.php > ../src/vars.php

stop:
	docker stop sss-web-ctf-final_h-duck

clean: stop
	docker rm sss-web-ctf-final_h-duck

.PHONY: build run stop clean
