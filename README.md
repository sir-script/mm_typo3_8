

# TYPO3 8 Relationship Bug

It looks like TYPO3 8 has some language overlaying problems with
bidirectional m:m relationships.

To demonstrate this, I've created a minimalistic extension.
It contains only two entities:

- one pricetable has many seasons
- one season belongs to many pricetables

## How to reproduce the bug? 

First of all, install the extension.

1. In the List-Module, create some season records ( maybe three or four ).
2. In the next step, create a new pricetable record and assign the seasons.

Until this point, everything works.
If you edit the pricetable and sort the assigned seasons, 
the sorting attribute will be updated correctly. 


3. In the next step, translate one of the assigned seasons to another language.
4. Now the following problems appear:

	1. When you switch back and jump into the pricetable, you will see, that the translated season appears twice in the selection. ( original record + translated record )
	2. Take a look into the database and keep an eye on the mm-table. For the translated season, a new entry was inserted into the mm-table. That's the reason, why the season appears twice in the selection menu.
		Besides this, the sorting is also broken, because the new entry has a sorting value of '0'.
		

## What is the expected behaviour? 
What am I doing wrong here? Can anybody explain that, please.