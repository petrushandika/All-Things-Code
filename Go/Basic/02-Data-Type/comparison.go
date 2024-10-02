package main

import "fmt"

func main() {
	// comparison operator
	var a = "dika"
	var b = "dika"

	var x bool = a == b
	fmt.Println(x)

	var y bool = a != b
	fmt.Println(y)

	var numA = "a"
	var numB = "b"

	var z bool = numA > numB

	fmt.Println(z)
}