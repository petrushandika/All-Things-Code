package main

import "fmt"

func main() {
	// notes: using data type and keyword var is optional

	// using variable with data type
	var name string

	name = "Petrus Handika"
	fmt.Println(name)
	
	name = "Petrus Sinaga"
	fmt.Println(name)

	// using variable without data type
	var user = "Handika Sinaga"
	fmt.Println(user)

	// using variable without var keyword
	fams := "Sinaga Family"
	fmt.Println(fams)

	// using variable with multiple variable
	var (
		firstName = "Petrus"
		lastName = "Handika"
	)

	fmt.Println(firstName)
	fmt.Println(lastName)
}