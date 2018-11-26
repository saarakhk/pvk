# Git kasutamise meelespea

Git repo initsialiseerimine:

``` 
$ git init
```

Faili nimega fail lisamine  git-ile ja commitimine:

``` 
$ git add Fail
$ git commit -m "Lisasin failli nimega Fail"
```

repo staatuse kontroll

``` 
$ git status
```

mitme failide lisamine git-ile ühe committi jaoks

``` 
$ git add my-first-file.ts another-file.js my-third-file.rb
$ git commit -m "Add three files"
```

giti logide vaatamine

``` 
$ git log
```

git puu vahetamine

``` 
$ git checkout <name>
```

faili vana seisundi taastamine git abil

``` 
$ git reset
```

commitide tühistamine lokaalses repos

``` 
$ git reset --soft HEAD^
```