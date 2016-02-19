UIView
@property(nonatomic) CGRect frame;
struct CGRect {
	CGPoint origin;
	CGSize size;
};
struct CGPoint {
	CGFloat x;
	CGFloat y;
}
struct CGSize {
	CGFloat width;
	CGFloat height;
}

@property(nonatomic) CGPoint center;

+ (void)beginAnimations
+ (void)commitAnimations
