
> [!NOTE] Goal
> - جعل المتعلم قادرًا على **تخطيط، تنفيذ، ومتابعة مشروع رقمي** باستعمال منهجية **Agile (Scrum/Kanban)**.
>- الانتقال من مجرد **مطور يكتب الكود** إلى **مطور Agile** يفكر في التخطيط، التعاون والعمل الجماعي.
>- اكتساب مزيج من:
 1- **المعارف التقليدية** (gestion de projet classique).
 2- **المقاربات الحديثة Agile** (خصوصًا Scrum).
 3- **الأدوات العملية** (Jira, GitLab, CI/CD, SonarQube).
>- النتيجة النهائية: أن تصبح قادرًا على **قيادة مشروع ويب أو تطوير رقمي من البداية للنهاية** بكفاءة ومرونة.

> [!NOTE] Resume
> ##### 1. Connaître les fondamentaux de la gestion de projet :     ==معرفة أساسيات إدارة المشاريع==
>  - Découvrir les Concepts de gestion de proje :==استكشاف مفاهيم إدارة المشاريع==
>  - Découvrir les différentes méthodes de gestion de projet:     ==اكتشاف الطرق المختلفة لإدارة المشاريع==
>  ##### 2. Planifier un projet:
> -  Analyser le cahier des charges:
> -  Préparer le projet:
 >##### 3. Adopter l ’approche Agile dans gestion de projet:
> - Appréhender la méthodologie Agile Scrum:
> - Manipuler l ’outil de gestion de projet Agile (Scrum /Jira ):
 >##### 4. Mettre en œuvre des outils de gestion de versions et de mesure de la qualité du code:
> - Manipuler les outils de gestion de versions (Git/Gitlab ):
> - Manipuler l ’outil de mesure de la qualité du code (SonarQube):
 >##### 5. Mettre en œuvre l es outils de la chaîne du DevOps:
> - Introduire la chaîne DevOps:
> - Mettre en place la CI/CD avec Gitlab:

# [Playliste](https://youtube.com/playlist?list=PLKV6WevXj-lWQfNX5OrF5IjdOTSuyTXuE&si=QG1JZzmUwWzCKMcw):[chatGPT](https://chatgpt.com/share/68d3d57b-5c00-800b-a3f6-ab2c284a6e69):[Copilot](https://github.com/copilot/share/482d4332-4340-8895-b800-de47a05220a2):
## <span style="color: rgb(255 100 100)">1. Connaître les fondamentaux de la gestion de projet</span>:
### <span style="color: rgb(50 200 50)">Découvrir les Concepts de gestion de projet</span>:
#### <span style="color: rgb(10 150 255)">1. Concepts de gestion de projet</span>:مفاهيم إدارة المشروع
- ***Projet***: Un effort ponctuel visant un objectif unique, avec début/fin, ressources et budget.
- (مشروع: جهد مؤقت له هدف فريد وبداية ونهاية وموارد وميزانية.)
- ***Gestion de projet***: Organisation et coordination temporaires des ressources pour atteindre les objectifs du projet.
- (إدارة المشروع: تنظيم وتنسيق الموارد مؤقتًا لتحقيق أهداف المشروع.)
- ***Ressource***: Élément nécessaire à l’exécution (personne, matériel, argent, temps, info).
- (المورد: عنصر ضروري للتنفيذ — شخص، معدات، مال، وقت، معلومات.)
- ***Livrable (deliverable)***: Résultat tangible remis au client (final ou intermédiaire).
- (المُسَلَّم: ناتج ملموس يُسلم للعميل — نهائي أو وسيطي.)
- ***Charte de projet***: Document court autorisant et définissant objectifs, périmètre et parties prenantes.
- (ميثاق المشروع: وثيقة مختصرة تفوض المشروع وتحدد الهدف والنطاق والأطراف المعنية.)
#### <span style="color: rgb(10 150 255)">2. Parties prenantes de projet</span>:أصحاب المصلحة
- **Partie prenante (stakeholder)***:  oute personne ou organisation ayant un intérêt dans le projet, étant affectée par lui ou pouvant l’influencer
- صاحب مصلحة = أي شخص أو جهة لها علاقة بالمشروع أو تتأثر به أو تؤثّر فيه
##### <span style="color: cyan">Acteurs externes</span>:

| Clients                                                       | Fournisseurs                                    | Communautés d’utilisateurs,<br>fans                    | Organismes privés, <br>ONG                | Investisseurs                                          |
| ------------------------------------------------------------- | ----------------------------------------------- | ------------------------------------------------------ | ----------------------------------------- | ------------------------------------------------------ |
| المستفيدون الرئيسيون من المنتج؛ مطالبهم تحدّد مواصفات القبول. | يوفّرون مواد/خدمات؛ تأثيرهم على الجداول والجودة | يؤثرون على انتقاء الحلول وتبنّيها (شبكات اجتماعية...). | قد تضغط أو تدعم المشروع (معايير، شراكات). | يطلبون عوائد/تقارير مالية ويؤثرون على ميزانية المشروع. |
##### <span style="color: cyan">Acteurs interne</span>:

| Client interne                   | Sponsor du projet                         | Utilisateurs                              | Direction<br>الإدارة العليا           | Équipe projet                | Comptabilité<br>خدمات الدعم        | Actionnaires<br>المساهمون / أصحاب الأسهم | Experts<br>خبراء ومختصون   | Syndicats<br>النقابات وممثلو العمال<br>        |
| -------------------------------- | ----------------------------------------- | ----------------------------------------- | ------------------------------------- | ---------------------------- | ---------------------------------- | ---------------------------------------- | -------------------------- | ---------------------------------------------- |
| الطرف الذي طلب المشروع أو يموله. | يوافق على الموارد ويسهل العوائق الإدارية. | سيستخدمون المنتج، يقدّمون متطلبات القبول. | تملك سلطة القرار والرؤية الاستراتيجية | من يقوم بتنفيذ العمل يومياً. | توفر موارد لوجستية وتقنية وإدارية. | يهتمون بالقيمة والنتائج المالية.         | يقدمون مشورة فنية/قانونية. | حمون حقوق الموظفين وقد يؤثرون على تنظيم العمل. |


#### <span style="color: rgb(10 150 255)">3. Principaux rôles dans un projet informatique</span>:
- Le chef de projet informatique: Responsable de la planification, coordination et suivi d’un projet IT pour livrer le produit dans les délais et le budget.
##### <span style="color: cyan">Matrice RACI</span>:

| R (Responsible)                | A (Accountable)                                                     | C (Consulted)                                           |  I(Informed)                                                |
| ------------------------------ | ------------------------------------------------------------------- | ------------------------------------------------------- | ----------------------------------------------------------- |
| من ينفذ المهمة (مثلاً: مطوّر). | من يوقّع ويأخذ القرار النهائي (مثلاً: مدير المشروع أو مالك المنتج). | يُستشار قبل القرار (مثلاً: مهندس معماري، مستخدم رئيسي). | المُطّلع: يُخبَر بالتطورات دون استشارة (مثلاً: إدارة عليا). |

#### <span style="color: rgb(10 150 255)">4. Caractéristiques de base d’un projet</span>

##### Les éléments fondamentaux : خصائص أساسية لأي مشروع

- **Objectifs clairs** : Chaque projet doit avoir des objectifs bien définis répondant à un besoin spécifique.  
    (كل مشروع يجب أن تكون له أهداف واضحة تستجيب لحاجة معيّنة.)

- **Limite dans le temps** : Un projet a toujours un début et une fin, marquée par l’atteinte de l’objectif.  
    (للمشروع بداية ونهاية مرتبطة بتحقيق الهدف.)
    
- **Activités et processus** : Une activité transforme les ressources (travail, savoir, équipements, matières, temps) en résultats. Plusieurs activités forment un processus.  
    (النشاط هو ما يحوّل الموارد إلى نتائج، وغالبًا ما نحتاج سلسلة أنشطة = عملية.)
    
- **Ressources (intrants)** : Ce sont l’argent, le personnel, le matériel, mais aussi le temps, la connaissance, l’infrastructure et la communication.  
    (الموارد هي كل ما يُستعمل لتحقيق النتائج: مال، وقت، معرفة، أشخاص، معدات، إلخ.)
    
- **Résultats attendus** : Biens ou services produits grâce aux activités, menant à l’atteinte de l’objectif spécifique.  
    (النتائج المتوقعة هي منتجات أو خدمات يقود تحقيقها إلى الهدف النهائي.)
    

#### <span style="color: rgb(10 150 255)">5. Contraintes dans la gestion d’un projet</span>: القيود في إدارة المشاريع

###### Définition : القيود في المشروع = الحدود التي لا يمكن تجاوزها

- **Contraintes de délais** : Le projet doit être terminé dans une fenêtre temporelle donnée.
    
    - _Externe absolue_ : Date fixe, incontournable (ex: événement sportif, clôture comptable).
        
    - _Externe fixe/variable_ : souvent contractuelle, avec pénalités de retard ou dates flexibles.  
        (قيود الوقت: يجب إنهاء المشروع في وقت محدد، بعضها صارم جدًا وبعضها مرن نسبياً.)
        
- **Contraintes de coûts** : Budget alloué au projet, équilibre financier et rentabilité.  
    (قيود الميزانية: يجب احترام حدود التمويل وضمان مردودية المشروع.)
    
- **Contraintes de qualité** : Normes légales, sécurité, santé publique, ou exigences commerciales/contractuelles.  
    (قيود الجودة: احترام المعايير القانونية، الصحية، والأمان، إضافة إلى الالتزامات التجارية.)
    

### <span style="color: rgb(50 200 50)">Découvrir les différentes méthodes de gestion de projet</span>:
- الطرق التقليدية (Waterfall, V, Y) = تخطيط صارم، صعوبة التعديل.
- الطرق المرنة (Agile) = تقسيم المشروع إلى أجزاء صغيرة، مرونة عالية، تواصل مستمر مع العميل.
- الفرق الأساسي: التقليدية تركّز على **الخطة**، بينما Agile تركّز على **القيمة والمنتج النهائي**.
#### <span style="color: rgb(10 150 255)">1. Méthodes prévisibles</span> (traditionnelles)

- Organisation stricte, déroulement en étapes séquentielles, peu de retour en arrière.
    
- **Exemples :**
    
    - **Waterfall (cascade)** : chaque phase doit être terminée avant de passer à la suivante. Avantage = plan clair ; Inconvénient = peu flexible.
        
    - **Cycle en V** : chaque étape de conception a une phase de validation correspondante. Avantage = rigoureux et clair ; Inconvénient = effet tunnel (faible adaptation).
        
    - **Cycle en Y (2TUP)** : approche unifiée (axe fonctionnel + axe technique). Plus flexible mais complexe.
        

#### <span style="color: rgb(10 150 255)">2. Méthodes imprévisibles</span> (Agiles)
#####  Les 4 valeurs agiles:

| الترجمة والشرح بالعربية                                                         | Valeur                                                                   |
| ------------------------------------------------------------------------------- | ------------------------------------------------------------------------ |
| الأفراد والتفاعل أهم من الأداة نفسها (الأدوات تُسهِّل لكن البشر يحلون المشكلات) | Les individus et leurs interactions plus que les processus et les outils |
| برنامج يعمل أهم من وثائق ضخمة غير مستعملة (لكن الوثائق “الكافية” مطلوبة)        | Du logiciel opérationnel plus qu’une documentation exhaustive            |
| تعاون حيّ مع العميل أهم من التمسك الجامد بالعقد                                 | La collaboration avec le client plus que la négociation contractuelle    |
| التعديل الذكي مع التغير أهم من تنفيذ خطة قديمة حرفياً                           | L’adaptation au changement plus que le suivi d’un plan                   |

##### Approche itérative et incrémentale
- Approche itérative et incrémentale (projet découpé en petites parties).
- Adaptation rapide aux changements, collaboration forte avec le client.

##### Principales méthodes :
| Méthode              | Idée centrale                                  | Quand c’est pertinent                         | Points clés                                                                                                      |
| -------------------- | ---------------------------------------------- | --------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| **Scrum**            | Sprints time-boxés livrant un incrément “Done” | Travail complexe avec incertitude produit     | Rôles (PO, Scrum Master, Dev Team), artefacts (Backlogs, Increment), cérémonies (Planning, Daily, Review, Rétro) |
| **Kanban**           | Gestion du flux continu et limitation du WIP   | Flux de demandes variées ou maintenance       | Tableau visuel, limites WIP, mesure Lead/Cycle Time                                                              |
| **Lean Development** | Maximiser la valeur, éliminer le gaspillage    | Besoin d’efficacité et d’apprentissage rapide | Évite sur‑fonctionnalités, retards, re-travail ; améliore la qualité en amont                                    |

| المنهجية | الفكرة المركزية | متى تكون مناسبة | نقاط رئيسية |
|----------|-----------------|-----------------|-------------|
| **Scrum (سكرَم)** | تقسيم العمل إلى دورات قصيرة محددة الزمن (Sprints) تُسلِّم في كل دورة زيادة مكتملة قابلة للاستخدام (Increment “Done”) | عند وجود عمل معقّد، غموض أو تغيّر في المتطلبات / المنتج | أدوار: مالك المنتج (PO)، ميسّر المنهجية (Scrum Master)، فريق التطوير. المخرجات: قوائم العمل (Product & Sprint Backlog)، الزيادة (Increment). الفعاليات: التخطيط، الاجتماع اليومي، المراجعة، جلسة التحسين (Retrospective) |
| **Kanban (كانبان)** | إدارة تدفّق العمل بصريًا وتقليل العمل الجاري (WIP) لتحسين الانسيابية | عند وجود تدفّق مستمر من طلبات متنوّعة، دعم، صيانة، أو حاجة للاستجابة السريعة | لوحة مرئية (Kanban Board)، حدود العمل الجاري (WIP Limits)، قياس زمن الإنجاز (Lead Time) وزمن الدورة (Cycle Time)، كشف الاختناقات |
| **Lean Development (التطوير الرشيق/اللّين)** | تعظيم القيمة وإزالة الهدر (Reducing Waste) وتحسين التعلّم والتحسين المستمر | عندما تكون الكفاءة، الجودة المبكرة، وتقليل التكاليف/الهدر أولوية؛ في البيئات التي تحتاج تسريع التعلّم | يركّز على إزالة الهدر (ميزات غير مستخدمة، إعادة عمل، انتظار، تبديل السياق، إلخ)، بناء الجودة مبكرًا، التعلّم السريع، التبسيط |


#### <span style="color: rgb(10 150 255)">3. Comparaison</span>

- **Cycle en V** : focalisé sur le processus, peu de place à l’adaptation.
- **Agile** : focalisé sur le produit, flexible, adapté aux besoins changeants.
## <span style="color: rgb(255 100 100)">2. Planifier un projet</span>:
### <span style="color: rgb(50 200 50)">Analyser le cahier des charges</span>:
#### <span style="color: rgb(10 150 255)">1. Compréhension des besoins client</span>:فهم احتياجات العملاء
##### 1. Objectif de cette étape  
- S’assurer que ce que le client (ou l’utilisateur) veut ET ce dont il a réellement besoin sont clairement compris, validés, structurés et priorisés avant d’engager des ressources lourdes.  
- التأكد من أننا نفهم ما يريده العميل وما يحتاجه فعلاً، ونوثقه ونُحدِّد أولوياته قبل استهلاك الموارد.

### <span style="color: rgb(50 200 50)">Préparer le projet</span>:

## <span style="color: rgb(255 100 100)">3. Adopter l ’approche Agile dans gestion de projet</span>:
### <span style="color: rgb(50 200 50)">Appréhender la méthodologie Agile Scrum</span>:
### <span style="color: rgb(50 200 50)">Manipuler l ’outil de gestion de projet Agile (Scrum /Jira )</span>:

## <span style="color: rgb(255 100 100)">4. Mettre en œuvre des outils de gestion de versions et de mesure de la qualité du code</span>:
### <span style="color: rgb(50 200 50)">Manipuler les outils de gestion de versions (Git/Gitlab )</span>:
### <span style="color: rgb(50 200 50)">Manipuler l ’outil de mesure de la qualité du code (SonarQube)</span>:

## <span style="color: rgb(255 100 100)">5. Mettre en œuvre l es outils de la chaîne du DevOps</span>:
### <span style="color: rgb(50 200 50)">Introduire la chaîne DevOps</span>:
### <span style="color: rgb(50 200 50)">Mettre en place la CI/CD avec Gitlab</span>:

[^1]: test
