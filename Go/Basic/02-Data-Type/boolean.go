package main

import "fmt"

func main() {
	fmt.Println("Benar", true)
	fmt.Println("Salah", false)

	var finalScore = 90
	var absenteeism = 80

	var passFinalGrade bool = finalScore > 80
	var passAbsenteeism bool = absenteeism > 80

	var result bool = passFinalGrade && passAbsenteeism

	fmt.Println(result)
}