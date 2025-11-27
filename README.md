# **MyWeeklyAllowance – Projet TDD (Test Driven Development)**

Ce projet consiste à développer un module de gestion d’argent de poche pour adolescents, en suivant la méthodologie **TDD (Test Driven Development)** :
**RED → GREEN → BLUE**.

L'objectif est de créer un système simple permettant aux parents de :

* créer un compte pour un ado,
* déposer de l’argent,
* enregistrer des dépenses,
* (fonctionnalités futures) ajouter une allocation automatique hebdomadaire.

---

# 📁 **Arborescence du projet**

```
TP-PHP/
├── composer.json
├── phpunit.xml
├── src
│   └── Account.php
└── tests
    └── AccountTest.php
```

---

# 🧪 **1. Phase RED – Écriture des tests**

Nous avons d'abord créé **les tests unitaires** avant d'écrire le code.

Fichier : `tests/AccountTest.php`

Tests écrits :

* `testNewAccountStartsWithZeroBalance`
* `testDepositIncreasesBalance`
* `testSpendDecreasesBalance`
* `testSpendMoreThanBalanceThrows`
* `testDepositNegativeAmountThrows`
* `testSpendNegativeAmountThrows`

Ces tests couvrent différentes situations : opérations valides, erreurs, limites, logique métier.

---

# 🟦 **2. Phase GREEN – Implémentation minimale**

Nous avons ensuite développé la classe **Account** pour faire passer les tests au vert.

Fichier : `src/Account.php`

Fonctionnalités implémentées :

* Compte avec ID, nom et solde initial à 0
* Dépôt d’argent (`deposit`)
* Dépense (`spend`)
* Gestion des erreurs :

  * montant négatif → `InvalidArgumentException`
  * dépense > solde → `RuntimeException`

---

# 🧹 **3. Phase BLUE – Refactoring**

Une fois tous les tests passés au vert, nous avons nettoyé/organisé le code pour une meilleure qualité :

* Correction syntaxique
* Organisation des méthodes
* Suppression des `use` inutiles dans les tests

---

# ✔️ **Résultat**

Les tests passent avec succès :

```
OK (6 tests, 6 assertions)
```

---

# 🚀 **4. Commandes utilisées**

Installer PHPUnit :

```bash
composer require --dev phpunit/phpunit
```

Lancer les tests :

```bash
./vendor/bin/phpunit --testdox
```

Créer l'arborescence :

```bash
mkdir -p src tests
touch src/Account.php tests/AccountTest.php composer.json phpunit.xml
```

---

# 📌 **Prochaines étapes possibles**

* Ajouter une allocation hebdomadaire automatique
* Ajouter un historique des transactions
* Ajouter une classe Parent / Teen
* Ajouter un système de "plafond" de dépenses

Dis-moi ce que tu veux faire mon frérot et on continue 🔥💪🏾
