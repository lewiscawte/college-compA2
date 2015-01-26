female(ruth).
female(kate).
male(james).
male("james 2").

parent(ruth, kate).
parent(ruth, james).

mother(M,C):-
	parent(M, C),
	female(M).
