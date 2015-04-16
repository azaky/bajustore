var
	s:string;
	h:integer;
	m:integer;
	c:integer;
begin
	readln(s);
	val(copy(s,1,2),h,c);
	val(copy(s,4,2),m,c);
	writeln((((h mod 12)*30)+(m/2)):0:(m mod 2),' ',m*6)
end.
