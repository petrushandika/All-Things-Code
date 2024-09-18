package main

import "fmt"

func main() {
	person := map[string]string{
		"name":    "Petrus",
		"address": "Bogor",
	}

	fmt.Println(person)
	fmt.Println(person["name"])
	fmt.Println(person["address"])

	book := make(map[string]string)
	book["title"] = "Golang Book"
	book["author"] = "Petrus Handika"
	book["wrong"] = "Ups"
	
	fmt.Println(book)

	delete(book, "wrong")

	fmt.Println(book)
}