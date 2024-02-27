**Terms:**

The developer was tasked with integrating an external CRM system and sending data to it. There is only one CRM at the moment, but there may be N in the future. The developer completed the task, the solution code is in this repository.

**Assignment:**

Review the code as thoroughly as possible. Make suggestions for improvements if necessary.

**Solution requirements:**

The solution must be in the form of a Google Docs link. 
Providing the solution in the correct form is one of the evaluation criteria.

# Later edit

When new Crm is needed than it should implement the CrmInterface and the new sender should extend from Sender class.

Run the client code:
```
php index.php
```

Run the tests (composer needs to be installed already) :

```
composer test
```
