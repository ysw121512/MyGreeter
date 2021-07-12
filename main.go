package main

import (
	"fmt"
	"time"
)

func main() {
	Client()
}
func Client() {
	nowH := time.Now().Hour()
	
	if 6 <= nowH && nowH < 12 {
		fmt.Println("Good morning")
	}
	if 12 <= nowH && nowH < 18 {
		fmt.Println("Good afternoon")
	}
	if 18 <= nowH && nowH < 24 || 0 <= nowH && nowH < 6 {
		fmt.Println("Good evening")
	}
}