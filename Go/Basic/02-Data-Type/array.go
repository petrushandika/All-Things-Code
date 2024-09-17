package main

import "fmt"

func main() {
	// array
	var names [3]string

	names[0] = "Petrus"
	names[1] = "Handika"
	names[2] = "Sinaga"

	fmt.Println(names[0])
	fmt.Println(names[1])
	fmt.Println(names[2])

	var value = [3]int {
		90, 80,
	}
	fmt.Println(value)

	// function array
	var values = [...]int {
		90,
		80,
		95,
	}
	fmt.Println(values)
	fmt.Println(len(values))
	values[0] = 100
	fmt.Println(values)
}