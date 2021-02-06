#je vais reprendre ici les bases du python

def calculPerimetre(cote1, cote2, cote3):
    perimetre = cote1 + cote2 + cote3
    return perimetre

perimetre1 = calculPerimetre(6, 4, 3)
perimetre2 = calculPerimetre(10, 3, 11)

print ('le perim', perimetre1, perimetre2)


listeEtrange = [4, 10.2, "Georges Dupond", ["une autre liste", 1]]
print(listeEtrange[3])


nom = input('Quel est ton nom, cher(e) inconnu(e) ?')

if len(nom) > 0:
    print("Hello", nom, "!")
else:
    print("Hello World !")



