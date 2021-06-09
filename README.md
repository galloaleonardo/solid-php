## SOLID principles - PHP examples.

---

### Runing

```shell
composer dump-autoload
```

```shell
cd to/principle/path
```
```shell
php index.php
```

---

### S
#### Single Responsibility
> A class should have a single responsibility
```shell
src/01-single-responsibility/violates
src/01-single-responsibility/right-way
```

### O
#### Open-Closed
> Classes should be open for extension, but closed for modification

```shell
src/02-open-closed/violates
src/02-open-closed/right-way
```

### L
#### Liskov Substitution
> If S is a subtype of T, then objects of type T in a program may be replaced with objects of type S without altering any of the desirable properties of that program.
```shell
src/03-liskov-substitution/violates
src/03-liskov-substitution/right-way
```

### I
#### Interface Segregation
> Clients should not be forced to depend on methods that they do not use.
```shell
src/04-interface-segregation/violates
src/04-interface-segregation/right-way
```

### D
#### Dependency Inversion
> High-level modules should not depend on low-level modules. Both should depend on the abstraction.  
Abstractions should not depend on details. Details should depend on abstractions.
```shell
src/05-dependency-inversion/violates
src/05-dependency-inversion/right-way
```