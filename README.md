# Applying the Decorator Pattern

## Initial version:

In this version there is only one class, the User class. This class contains
all the logic that is relevant to the User class such as determining the
rating of a certain user. You could imagine that this class will be
sensitive to becoming a god class. Defining another rating algorithm forces
the programmer to perform some surgery on the User class which could lead
to bugs. Therefore we are looking for a way to decouple the rating algorithm
from the User class pouring the code into a more modular structure. This
increases testability and maintainability since the units will be smaller
with less internal dependencies. Decoupling the rating algorithm from the
User class still leaves us with a algorithm that is one solid brick, i.e all
the calculations are molded together in a single function. Adjusting this
calculation at runtime means that we have to apply some control flow that
reduces readability. We prefer to keep responsibilities separated and thus
we are looking for a way to unravel the algorithm in more accessible pieces.

Two things we are going to investigate:

1. How to decouple the rating algorithm from the User class?
2. How to organize the algorithm in modular configurable pieces?
 