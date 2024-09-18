package main

import "fmt"

func main() {
	// conditional if, else if, and else
	name := "Dika"

	if name == "Petrus" {
		fmt.Println("Hello Petrus")
	} else if name == "Dika" {
		fmt.Println("Hi Dika")
	} else {
		fmt.Println("Hello User")
	}

	// if short statement
	if length := len(name); length > 5 {
		fmt.Println("Name Too Long")
	} else {
		fmt.Println("Name Too Short")
	}
}