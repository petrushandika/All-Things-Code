package main

import "fmt"

func main() {
	// conditional switch case
	name := "Jamal"

	switch name {
	case "Petrus":
		fmt.Println("Hello Petrus")

	case "Dika":
		fmt.Println("Hello Dika")

	default:
		fmt.Println("Hello User")
	}

	// switch case short statement
	switch length := len(name); length > 5 {
	case true:
		fmt.Println("Name Too Long")

	case false:
		fmt.Println("Name Too Short")
	}

	// switch without conditional
	length := len(name)
	switch  {
	case length > 10:
		fmt.Println("Name Too Long")
	
	case length > 5:
		fmt.Println("Name Not Too Long")
		
	default:
		fmt.Println("Name Is Correct")
	}
}