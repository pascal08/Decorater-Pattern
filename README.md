# Applying the Decorator Pattern

## Problem definition:

Suppose we have a written a piece of software that calculates a rating 
for a certain user based on multiple criteria. We want to be able to
test this piece of software and structure it so that it is clear what
to responsibilities are of all parts of this piece of software.

## Initial version:

In this version there is only one class, the User class. This class contains
all the logic that is relevant to the User class. This could be the name
of the User, his or her age, email, telephone number, etc. This class also
contains the logic for calculating the rating of a certain user. You could 
imagine that this class will be sensitive to becoming a so called "god class". 
A god class is a class that acts like a god. It knows everything and takes a
centralized position inside the system. A god class often contains a wide variety 
of logic each with different responsibilities. The number of dependencies a 
class has, is strongly related to the number of different responsibilities. 
The more things a class can do, the more other class will depend on this class. 
Something we don't want, because the more a system relies on certain classes, 
the more a class can break when makes changes to it. Instead we'd prefer to
spread out the responsibilities as best as we can.

Looking closer at the implementation of the rating algorithm, we notice that
defining another rating algorithm forces the programmer to perform some surgery 
on the User class, something we should be scared of since the complexity of the
User class. Therefore we are looking for a way to decouple the rating algorithm
from the User class pouring the code into a more modular structure. This
increases testability and maintainability since the units will be smaller
with less internal dependencies. This also reduces the number of bugs a change
can cause. Decoupling the rating algorithm from the User class still leaves us 
with a algorithm that is one solid brick, i.e all the calculations are molded 
together in a single function. If we want to adjust this calculation at runtime 
we have to apply some control flow, which will inevitability reduce readability. 
We'd prefer to keep responsibilities separated and thus we are looking for a way 
to unravel the algorithm in more accessible pieces.

Two things we are going to investigate:

1. How to decouple the rating algorithm from the User class?
2. How to organize the algorithm in modular configurable pieces?
 