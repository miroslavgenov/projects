$cpp = Read-Host "cpp file:";
$scpp = $cpp -split "\.";
$exc =$scpp[0];
g++ -std=c++11 -o $exc $cpp
Invoke-Expression "./$exc.exe";
