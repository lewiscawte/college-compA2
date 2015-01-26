% Prolog example

female(ruth).
female(kate).
male(james).
male("james 2").

parent(kate, ruth). % kate is parent of ruth
parent(james, ruth). % james is parent of ruth

mother(M,C):-
	parent(M, C),
	female(M).
father(F,C):-
	parent(F, C),
	male(F).
