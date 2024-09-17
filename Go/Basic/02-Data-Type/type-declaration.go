package main

import "fmt"

func main() {
	// type is aliases of data type
	type NoKTP string

	var ktpDika NoKTP = "111111111"

	var example string = "222222222"
	var exampleKtp NoKTP = NoKTP(example)

	fmt.Println(ktpDika)
	fmt.Println(exampleKtp)
}